<?php namespace Folklore\GraphQL;

use Illuminate\Http\Request;

class GraphQLController extends Controller {
    
    public function query(Request $request)
    {
        $query = $request->get('query');
        $params = $request->get('params');
        
        if(is_string($params))
        {
            $params = json_decode($params, true);
        }
        
        return $return;
    }
    
}