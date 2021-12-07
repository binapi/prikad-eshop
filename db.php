<?php

function connectionEshop(){

    $GLOBALS["connection"] = mysqli_connect("localhost","root","","e-shop");
        if(!$GLOBALS["connection"]){
            die("Database connection failed");
        }
}

function selectAll(){
    
    $GLOBALS["query"] = "SELECT * FROM product_item";
    $GLOBALS["result"] = mysqli_query($GLOBALS["connection"],$GLOBALS["query"]);
        if(!$GLOBALS["result"]){
            die("Failed to print data from database");
        }
}

function selectId(){
    $id = $_GET["id"];
    $GLOBALS["query2"] = "SELECT * FROM product_item WHERE id = $id";
    $GLOBALS["result2"] = mysqli_query($GLOBALS["connection"],$GLOBALS["query2"]);
        if(!$GLOBALS["result2"]){
            die("Failed to print data from database");
        }

}