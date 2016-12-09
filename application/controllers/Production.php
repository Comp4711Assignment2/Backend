<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends Application
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $source = $this->Recipe->all();
                $recipes = array();
                foreach ($source as $recipe)
		{
                    $recipes[] = array ('code' => $recipe['code'], 'description' => $recipe['description'], 'ingredients' => $recipe['ingredients']);
		}
                $this->data['recipes'] = $recipes; 
                $this->data['pagebody'] = 'ProductionPage';
                $this->render();
	}
        
        public function show($code)
        {
            $oneRecipe = $this->Recipe->get($code);
            $this->data = array_merge($this->data, $oneRecipe); 
            $source = $this->Recipe->all();
                $recipes = array();
                foreach ($source as $recipe)
		{
                    if($recipe['code'] != $code ){
                        $recipes[] = array ('code' => $recipe['code'], 'description' => $recipe['description'], 'ingredients' => $recipe['ingredients']);   
                    }
                }
                $this->data['recipes'] = $recipes;
            $this->data['pagebody'] = 'OneProduction';
            $this->render();
        }
}
