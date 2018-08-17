<?php

$config = array(
            
    // --------------------------------- LOGUEO ADMIN ------------------------------


            'loguearse' => array(
                                    array(
                                            'field' => 'usuario',
                                            'label' => 'usuario',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'clave',
                                            'label' => 'clave',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ),

            'enviar_email' => array(
                                    array(
                                            'field' => 'nombre',
                                            'label' => 'nombre',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'apellido',
                                            'label' => 'apellido',
                                            'rules' => 'trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'mensaje',
                                            'label' => 'mensaje',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ),

            'procesa_consulta_web' => array(
                                    array(
                                            'field' => 'nombre',
                                            'label' => 'nombre',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'apellido',
                                            'label' => 'apellido',
                                            'rules' => 'trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'required|trim|xss_clean|valid_email'
                                        ),
                                    array(
                                            'field' => 'telefono',
                                            'label' => 'telefono',
                                            'rules' => 'trim|xss_clean'
                                        ), 
                                    array(
                                            'field' => 'mensaje',
                                            'label' => 'consulta',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ) 
                                
);


?>