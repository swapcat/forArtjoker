<?php

class View {
    
    public function generate ($templateView, $dataView, $data = 0) {
        
        
        include 'application/views'.$templateView;
    }
}