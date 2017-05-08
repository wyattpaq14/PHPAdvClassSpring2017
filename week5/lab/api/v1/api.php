<?php

include_once './autoload.php';

/*
 * The Rest server is sort of like the page is hosting the API
 * When a user calls the page (By url(HTTP), CURL, JavaScript etc.), the server(this Page) will handle the request.
 */
$restServer = new RestServer();

try {

    $restServer->setStatus(200);

    $resource = $restServer->getResource();
    $verb = $restServer->getVerb();
    $id = $restServer->getId();
    $serverData = $restServer->getServerData();


    $resourceUCName = ucwords($resource);

    $resourceClasSName = $resourceUCName . 'Resoruce';


    //$resourceData = new $resourceClasSName;

    /*
     * You can add resoruces that will be handled by the server 
     * 
     * There are clever ways to use advanced variables to sort of
     * generalize the code below. That would also require that all
     * resoruces follow the same standard. Interfaces can ensure that.
     * 
     * But in this example we will just code it out.
     * 
     */

    try {
        $resourceData = new $resourceClasSName();
    } catch (InvalidArgumentException $e) {
        throw new InvalidArgumentException($resourceUCName . ' Resource Not Found');
    }


    if ('GET' === $verb) {

        if (NULL === $id) {

            $restServer->setData($resourceData->getAll());
        } else {

            $restServer->setData($resourceData->get($id));
        }
    }

    if ('POST' === $verb) {


        if ($resourceData->post($serverData)) {
            $restServer->setMessage($resourceUCName . ' Added');
            $restServer->setStatus(201);
        } else {
            throw new Exception($resourceUCName . ' could not be added');
        }
    }


    if ('PUT' === $verb) {

        if (NULL === $id) {
            throw new InvalidArgumentException($resourceUCName . ' ID ' . $id . ' was not found');
        }

        if ($resourceData->put($id, $serverData)) {

            $restServer->setMessage($resourceUCName . ' Updated');
            $restServer->setStatus(201);
        } else {
            
        }
    }

    if ('DELETE' === $verb) {

        if (NULL === $id) {
            throw new InvalidArgumentException($resourceUCName . ' ID ' . $id . ' was not found');
            exit();
        }

        if ($resourceData->delete($id)) {
            $restServer->setMessage($resourceUCName . ' Deleted');
            $restServer->setStatus(201);
        } else {
            throw new Exception($resourceUCName . ' could not be added');
        }
    }





    /* 400 exeception means user sent something wrong */
} catch (InvalidArgumentException $e) {
    $restServer->setStatus(400);
    $restServer->setErrors($e->getMessage());
    /* 500 exeception means something is wrong in the program */
} catch (Exception $ex) {
    $restServer->setStatus(500);
    $restServer->setErrors($ex->getMessage());
}


echo $restServer->getReponse();
exit();
