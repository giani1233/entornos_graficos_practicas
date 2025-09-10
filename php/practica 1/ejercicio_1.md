
    - Variables y su tipo:
        $a = TRUE  --> Boolean
        $b = "xyz" --> String
        $c = 'xyz' --> String
        $d = 12    --> Integer
    
    - Operadores: 
        =  --> Asignación
        *  --> Multiplicación
        += --> Suma y asignación
        ++ --> Incremento
        ?: --> Operador ternario
    
    - Funciones y sus parámetros: 
        function doble($i), parámetro: $i
        echo gettype($a), parámetro: $a
        echo gettype($b), parámetro: $b
        echo gettype($c), parámetro: $c
        echo gettype($d), parámetro: $d
        is_int($d), parámetro: $d
        is_string($a), parámetro: $a
    
    - Estructuras de control:
        if (is_int($d)) {
            $d += 4;
        }
        if (is_string($a)) {
            echo "Cadena: $a";
        }
        $d = $a ? ++$d : $d*3;
    
    - Salida por pantalla:
        booleanstringstringinteger1xyzxyz184444