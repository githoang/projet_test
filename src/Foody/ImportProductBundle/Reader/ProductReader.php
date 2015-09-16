<?php

namespace Foody\ImportProductBundle\Reader;

use Akeneo\Bundle\BatchBundle\Item\ItemReaderInterface;
use Akeneo\Bundle\BatchBundle\Item\AbstractConfigurableStepElement;

class ProductReader extends AbstractConfigurableStepElement implements ItemReaderInterface
{
    protected $bdd;
    protected $reponse;

    public function read()
    {
        if (null ===  $this->bdd) {
            try
            {
                $this->bdd = new \PDO('mysql:host=localhost;dbname=poe_dev', 'root', 'hoang');
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }


            $this->reponse =  $this->bdd->query(
                   'SELECT *
                        FROM gtin
                        LEFT JOIN brand ON gtin.BSIN = brand.BSIN
                        WHERE GPC_S_CD = "50000000"
                        AND GPC_F_CD IS NOT NULL
                        AND GTIN_NM IS NOT NULL
                        LIMIT 0 , 5');

        }

        $data = $this->reponse->fetch(\PDO::FETCH_ASSOC);

        if(null != $data)
        {
            return $data;
        }

        return null;
    }

    public function getConfigurationFields()
    {
        return array();
    }
}