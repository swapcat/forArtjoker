<?php

class Route {
    
    static function start() {
        
        $controllerName = 'Main';
        $actionName = 'index';
        
        $pathController = $_SERVER['REQUEST_URI'];
        $pathController = explode('/', $pathController);
        if (!empty($pathController[1])) {
            $controllerName = $pathController[1];            
        }
        if (!empty($pathController[2])) {
            $actionName = $pathController[2];                
        }
        
        $controllerNamePre = 'Controller'.$controllerName;
        $controllerFile = strtolower($controllerNamePre).'.php';
        $filePath = 'application/controllers/'.$controllerFile;        
        if (file_exists($filePath)) {
            require $filePath;
        }
      
        $modelName = 'Model'.$controllerName;
        $modelFile = strtolower($modelName).'.php';
        $filePath = 'application/models/'.$modelFile;        
        if (file_exists($filePath)) {
            require $filePath;
        }
        $actionIndex = 'action_'.$actionName;
        $controller = new $controllerName;
        $action -> $actionIndex;        var_dump(action);
    }
}