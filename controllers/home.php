<?php

class HomeController extends xWebController {

    function defaultAction() {
        return xView::load('home/index', $data)->render();
    }
}