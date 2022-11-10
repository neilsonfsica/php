<?php
$hierarquia = array(

	array(
		'nome_cargo'=>'CEO',
		'subordinado'=>array(
			array(
				'nome_cargo'=>'diretor comercial',
				'subordinado'=> array(
					array(
						'nome_cargo'=> 'gerente de vendas'
					)
				)

			),
			array(
				'nome_cargo'=> 'diretor financeiro',
				'subordinado'=>array(
					array(
						'nome_cargo'=>'gerente de contas a pagar',
						'subordinado'=> array(
							array(
								'nome_cargo'=>'supervisor de pagamentos'
							)
						)

					),

					array(

						'nome_cargo'=>'gerente de compras',
						'subordinado'=> array(
							array(
								'nome_cargo'=>'supervisor de suprimentos',
							)
						)
					)
				)
			)
		)
	)
);


function exibe($cargos){

	$html = '<ul';
	$html .= "</ul>";
	return $html;
};
 
 echo exibe($hierarquia)
?>