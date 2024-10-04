<?php
namespace App\View\Components\Form;  

use Illuminate\View\Component;  

class ImageUpload extends Component  
{  
    public $label;  
    public $name;  
    
    public function __construct($label, $name)  
    {  
        $this->label = $label;  
        $this->name = $name;  
    }  

    public function render()  
    {  
        return view('components.form.image-upload');  
    }  
}