<?php
namespace Core\HTML;

class BulmaForm extends Form {


    protected function surround($html){
        return "<div class='fields'> {$html} </div>";
    }


    public function input($name,$label,$options = []){
        
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label ='<label>'. $label . '</label>';
        if($type === 'textarea'){
            $input = '<textarea class="input" name="'.$name.'">'.$this->getValue($name).'</textarea>';
        }
        else
        {
            $input = '<input type="'.$type.'"  name="'.$name.'" value="'.$this->getValue($name).'" class="input" >';
        }
       
        return $this->surround($label . $input);
    }

    public function select($name,$label,$options){
        $label ='<label>'. $label . '</label>';
        $input='<select class="input" name="'.$name.'">';
        foreach($options as $k =>$v){
            $attributes ='';
            if($k == $this->getValue($name)){
                $attributes ='selected';
            }
            $input.="<option value='$k' $attributes>$v</option>";
        }

        $input.='</select>';
        return $this->surround($label . $input);
    }

    public function submit(){
        return $this->surround('<button type="submit" class="button is-primary" >Envoyer</button>');
    }
}


