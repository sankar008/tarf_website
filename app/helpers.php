<?php 
    function getCompany(){
        $companyDetails = \App\Models\Company::first();
        return $companyDetails;
    }
?>