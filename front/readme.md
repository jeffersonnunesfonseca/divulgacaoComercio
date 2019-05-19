instalando yarn linux
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -

echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt update
sudo apt install yarn

video tutorial https://www.youtube.com/watch?v=aQFPetOyzUE&t=873s
documentaçao e exemplos sobre next https://github.com/zeit/next.js/

server-side rendering:
- tras mais performance, permite que utilize o SEO fazendo com que a pagina seja indexada

observacao:
- quando não é o primeiro acesso, o react so executa o lado front, porém mesmo com o js desabilitado a pagina é carrega, trazendo problema apenas para os state

instalando react e o next
- npm init -y = inicializa packge json do node
- npm install pm2 -g = instala pm2
- yarn add react react-dom next
- yarn add isomorphic-fetch = biblioteca que estabiliza api no front e no back
- yarn add pm2 -g = instala gerenciador de processos

scripts:
- "pm2_dev": "pm2 start server/server.js", => EXECUTA SERVER COM O PM2
- "dev": "node server/server.js", => EXECUTA O SERVIDOR
- "build": "next build",          => COMPILA APP OTIMIZANDO PARA PROD.
- "start": "node server/server.js start" => STARTA O COMPILADO