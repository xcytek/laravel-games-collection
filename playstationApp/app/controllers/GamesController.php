<?php

class GamesController extends BaseController{
    
    public function index(){
        //Show a listing of games
        $games = Game::paginate(1);
        
        return View::make('index', compact('games'));
    }
    
    public function create(){
        //Show the create game form
        return View::make('create');
    }
    
    public function handleCreate(){
        //Handle create form submission
        $game = new Game;
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::get('complete');
        $game->save();
        
        return Redirect::action('GamesController@index');
    }
    
    public function edit(Game $game){
        //Show the edit game form
        return View::make('edit', compact('game'));
    }
    
    public function handleEdit(){
        //Handle edit form submission
        $game = Game::findOrFail(Input::get('id'));
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::get('complete');
        
        $game->save();
        
        return Redirect::action('GamesController@index');
    }
    
    public function delete(Game $game){
        //Show delete confirmation page
        return View::make('delete', compact('game'));
    }
    
    public function handleDelete(){
        //Handle the delete submission
        $game = Game::findOrFail(Input::get('game'));
        $game->delete();
        
        return Redirect::action('GamesController@index');
    }
}