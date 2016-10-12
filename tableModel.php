<?php

class tableModel 
{
    
    public $config;
    public $params;
    public $data;
    
    public $rowCount;
    public $columnCount;
    public $tdWidth;
    public $tdHeight;
    
    public $tableWidth;
    public $tableHeight;
    
    public function __construct($config){
        $this->config=$config;
        $this->params=$config['params'];
        $this->data=$config['data'];
        
        $this->rowCount=$config['params']['rowCount'];
        $this->columnCount=$config['params']['columnCount'];
        $this->tdWidth=$config['params']['tdWidth'];
        $this->tdHeight=$config['params']['tdHeight'];
        
        $this->tableWidth=$this->tdWidth*$this->columnCount;
        $this->tableHeight=$this->tdHeight*$this->rowCount;        
    }
   
     /**
     * Расчет контента таблицы
     */
     public function tableContent(){
        $content='';
        $td=1;//счетчик ячеек                                                  
        for($i=1;$i<=$this->rowCount;$i++){//проход по строкам
            $content=$content."<tr>";
                for($k=1;$k<=$this->columnCount;$k++){   //проход по столбцам
                     $content=$content.$this->getTd($td);//передаю номер ячейки для расчета стиля отображения ячейки
                     $td++;
                }
            $content=$content."</tr>";
        } 
        return $content;
    }   
    
    
    /**
     * Расчет стиля отображения ячейки по ее номеру
     */
    public function getTd($number){

        $td="<td></td>";//значение по умолчанию
        
        foreach($this->data as $key){ //проход по массиву входящих данных

            $cells=split(",",$key['cells']);//массив номеров ячеек области форматирования

            if(in_array($number,$cells)){
                $td="<td";
                if(array_search($number,$cells)==0){ //форматирование задается для верхней левой ячейки области

                    //расчитываю количество объединяемых столбцов
                    $colspan=1;
                    $sch=$number;
                    while(in_array($sch+1,$cells)){
                        $colspan++;
                        $sch++;
                    }  

                    //расчитываю количество объединяемых строк
                    $rowspan=1;
                    $sch=$number;
                    while(in_array($sch+$this->columnCount,$cells)){
                        $rowspan++;
                        $sch=$sch+$this->columnCount;
                    }               

                    //задаю параметры стиля отображения
                    $td=$td.
                            " align=".$key['align'].
                            " valign=".$key['valign'].
                            " bgcolor=".$key['bgcolor'].
                            " colspan=".$colspan.
                            " style='width:".($colspan*$this->tdWidth)."px';".
                            " rowspan=".$rowspan;
                    $td=$td.">".
                            "<span style='color:#".$key['color']."'>".
                                $key['text'].
                            "</span>".
                            "</td>";
                    
                    return $td;    
                }
                else{
                    return "";
                };
            }   
        }
        return $td;
    }

}

