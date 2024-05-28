<!-- <?php
// URL do servidor
$server_url = 'http://exemplo.com/api';

// Dados a serem enviados para o servidor (no formato JSON, por exemplo)
$data = array(
    'nome' => 'João',
    'email' => 'joao@example.com'
);
$data_string = json_encode($data);

// Inicializa a sessão cURL
$ch = curl_init($server_url);

// Configura as opções da requisição cURL
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

// Executa a requisição cURL e armazena a resposta
$response = curl_exec($ch);

// Verifica por erros
if(curl_errno($ch)){
    echo 'Erro ao enviar requisição: ' . curl_error($ch);
}

// Fecha a sessão cURL
curl_close($ch);

// Exibe a resposta do servidor
echo $response;
?> -->
