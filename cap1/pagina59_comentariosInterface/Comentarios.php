<?php

Interface IFace
{
    // @return string
    function stringMethod();

    // @return integer e use propriedade integer
    function numMethod($intProp);

    // não use return
    function noReturnMethod();
}