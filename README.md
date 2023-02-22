<p align="center"><a href="[]([https://www.stwautomacao.com.br/](https://www.stwautomacao.com.br/)"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwpawjV9LS6_Mf0_0uzN3KSAjO6ens6OdnePLbO71AII9U7FF3VVDhGKzEVT0Fh6lCHms&usqp=CAU" width="250" alt="Laravel Logo"></a></p>

# <p align="center">Projeto Recipe</p>

<p align="center">O projeto é oriundo de um desafio com propósito de avaliar a capacidade técnica como FullStack, se trata de um sistema para uma fábrica de ração, onde deve ser praticável a manipulação de suas receitas, contendo todas as operações necessárias para o cadastro das mesmas</p>  
  
  ## <p>Contexto :blue_book:</p>
<p>O cliente produz em sua fábrica inúmeras receitas diferentes. Essas receitas possuem um conjunto de ingredientes que devem ser consumidos na ordem que são salvos. Atualmente, essa receita é feita em um Excel e impressa sempre que finalizada. Nesse sentido, deve-se elaborar uma solução que elimine a impressão em papel dessas receitas e facilite o gerenciamento das mesmas</p>  
  
  ## <p>Obejtivo :triangular_flag_on_post:</p>
### 1. Receitas
- [x] Listar receitas
- [x] Listar uma determinada receita com seus respectivos ingredientes 
- [x] Adicionar uma nova receita com seus respectivos ingredientes
- [ ] Atualizar uma receita com seus respectivos ingredientes
- [ ] Excluir uma receita
    
### 2. Ingredientes
- [x] Listar os ingredientes
- [x] Adicionar um novo ingrediente
- [ ] Atualizar um ingrediente
- [ ] Excluir um ingrediente  
  
## Pré-requisitos :fast_forward:
 - Faça o download do [Docker Desktop](https://www.docker.com/products/docker-desktop/)
 - Faça o download do [Visual Studio Code](https://code.visualstudio.com/download)  
   
## Executar aplicação :arrow_forward:
Crie um repositório local 
> Abra seu repositório no terminal

No terminal escreva o seguinte comando: 
```ruby
git clone https://github.com/Hlucht/fabrica_de_racao.git
```
> Abra o Docker Desktop e espere ele inicializar

Abra sua pasta com o projeto no VS Code
> Inicialize um terminal no próprio VS Code `ctrl + "` e escreva o seguinte comando: 

```ruby
docker-compose up --build
```
<p> :coffee: Pegue um café, vamos aguardar...</p> 

<sup>Pode ser que demore, pois aqui será feito todas as instalações necessárias</sup>

#### Prontinho ! Aplicação rodando

Acesse a partir da rota [https://localhost:8000/receitas](https://localhost:8000/receitas)  
  
## Navegando :sailboat:
###  :rocket: *Fluxo Ideal*  
A página inicial é onde deve ser listado todas as receitas, nela há as funcionalidades de **Cadastrar e Excluir uma receita**  
  
  - **Cadastrar:** Assim que criada a nova receita, o fluxo da aplicação é o seguinte, o redirecionamento após o cadastro mostra a receita recém criada `localhost:8000/receita/id_receita` e nessa página seria possível incluir os ingredientes respectivos a ela, da mesma maneira que a quantidade de cada um deles podendo também organizar a ordem. Salva as alterações a próxima tela voltaria a ser de receitas `localhost:8000/receitas`  
  - Também é possível acessar uma única receita clicando no nome dela  
    
  Na página que lista uma única receita há as funcionalidades **Editar a receita, Adicionar um ingrediente, Remover um ingrediente, Editar um ingrediente e Editar a ordem**  
    
   - **Editar a receita:** Edita o nome da receita
   - **Editar ingrediente:** Edita a quantidade prevista em KG do ingrediente
   - **Editar a ordem:** Permite que você arraste o ingrediente para reordena-los  

      <sup>Acionando a funcionalidade **Salvar** a próxima tela voltaria a ser de receitas `localhost:8000/receitas`</sup> 
      
  Na página que lista os ingredientes há as funcionalidades **Editar ingrediente, Adicionar um ingrediente, Excluir um ingrediente**
  
    
### *:warning: Não implementado*  
- Excluir receita
- Editar receita
- Editar adicionar ou remover um ingrediente dentro da receita 
> No sistema assim que uma receita única é mostrada, os ingredientes que nela aparecem é apenas um exemplo, já que a funcionalidade de adicionar os inrgrediente não foi cumprida
- Excluir ingrediente
- Editar Ingrediente
    
> As funcionalidades não vieram a ser implementadas por falta de competência técnica em relação as linguagens escolhidas, o desafio propôs algumas tecnologias para o desenvolvimento, sendo assim abracei o desafio como um todo. Porém os obstáculos encontrados foi em como relacionar e realizar a passagem de dados entre o Vue.js e o Laravel, a questão de roteamento e os verbos HTTP das funcões em Laravel  

> Partindo do ponto de que eu detinha um breve conhecimento de Vue.js e nada de Laravel, dispus uma parte do tempo para um curso introdutório de Laravel, as outras referências se basearam nas documentações e em pesquisas genéricas
