import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

//Páginas
import RecipesComponent from './pages/RecipesComponent.vue';
app.component('recipes-component', RecipesComponent);

import RecipeIngredientsComponent from './pages/RecipeIngredientsComponent.vue';
app.component('recipe-ingredients-component', RecipeIngredientsComponent);

import IngredientsComponent from './pages/IngredientsComponent.vue';
app.component('ingredients-component', IngredientsComponent);


//Navegação
import NavComponent from './components/NavComponent.vue';
app.component('nav-component', NavComponent);


//Modais
import ModalFlexComponent from './components/ModalFlexComponent.vue';
app.component('modal-flex-component', ModalFlexComponent);

import ModalDeleteComponent from './components/ModalDeleteComponent.vue';
app.component('modal-delete-component', ModalDeleteComponent);

import ModalEditAmoutComponent from './components/ModalEditAmoutComponent.vue';
app.component('modal-edit-amount-component', ModalEditAmoutComponent);

import ModalAddIngredientComponent from './components/ModalAddIngredientComponent.vue';
app.component('modal-add-ingredient-component', ModalAddIngredientComponent);


app.mount('#app');
