<?php  

namespace App\View\Components\Form;  

use Illuminate\View\Component;  

class Select extends Component  
{  
    public $label;  
    public $name;  
    public $id;  
    public $options; // Untuk menampung kategori  
    public $selected; // Untuk menampung nilai yang dipilih  

    public function __construct($label, $name, $options, $selected = null)  
    {  
        $this->label = $label;  
        $this->name = $name;  
        $this->id = $name;  
        $this->options = $options;  
        $this->selected = $selected;  
    }  

    public function render()  
    {  
        return view('components.form.select');  
    }  
}