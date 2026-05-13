# ⚙️ Guia de Instalação: Página Web QoS Tel

Esta secção descreve como configurar o ambiente de desenvolvimento e colocar a aplicação a funcionar localmente.

*** 

## Pré requisitos

Antes de iniciares, garante que tens os seguintes componentes instalados:
- Linguagem: **PHP**
- Base de dados: **MySQL** 
- Gestor de Pacotes: **composer**

## Passo a Passo

1. Clonar o Repositório

    Começa por descarregar o código para a tua máquina local:

    ```
    git clone https://github.com/josemarmartins21/qostel.git
    ```

2. Configurar Variáveis de Ambiente
    
    A aplicação utiliza um ficheiro .env para gerir acessos à base de dados.

    - Duplica o ficheiro de exemplo:
       ```
       cp .env.example .env
       ```
    - Abre o ficheiro .env e preenche as credenciais conforme o teu ambiente local.

3. Instalar Dependências

        
        composer install
        
## 🚀 Executar a Aplicação            
Com tudo configurado, podes iniciar o servidor de desenvolvimento com o seguinte comando:
```
php -S 127.0.0.1:8000

sass assets/css/index.scss assets/css/index.css --watch
```
