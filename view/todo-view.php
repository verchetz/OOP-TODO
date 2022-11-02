<?php

namespace View{

    use Service\TodoService;
    use Helper\Input;

    class TodoView{


        private TodoService $todoService;

        public function __construct(TodoService $todoService)
        {
            $this->todoService = $todoService;
        }

        public function showTodo()
        {
            while(true){
                $this->todoService->showTodo();
        
                echo "Menu \n";
                echo "1. Tambah list \n";
                echo "2. Hapus Todo \n";
                echo "x. keluar \n";
            
                $pilihan = Input::input("pilih");
            
                if ($pilihan == "1") {
                    $this->addTodo();
                }else if($pilihan == "2"){
                    $this->rmvTodo();
                }elseif($pilihan == "x"){
                    break;
                }else{
                    echo "Harap masukan input sesuai menu \n";
                }
            }
            echo "BABAI \n";
        }

        public function addTodo()
        {
            echo "Menambah to do \n";
            $todo = Input::input("Todo (x batal) ");
        
            if($todo == "x"){
                echo "batal menambah todo \n";
            }else{
                $this->todoService->addTodo($todo);
            }
        }

        public function rmvTodo()
        {
            echo "Menghapus Todo \n";

            $pilihan = Input::input("nomor (x untuk batal)");
        
            if($pilihan == "x"){
                echo "BATAL DIAPUS! \n";
            }else{
                $succsess = $this->todoService->rmvTodo($pilihan);
            }
        }
    }


}