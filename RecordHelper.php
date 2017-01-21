<?php

namespace jmoguelruiz\yii2\helpers;

use Yii;
use yii\db\Transaction;

class Helper{
   
     /**
     * 
     * Begin one transaction validate it if actually exist.
     * 
     * @return Transaction
     */
    public static function beginTransaction()
    {
        return !empty(Yii::$app->db->getTransaction()) ? null : Yii::$app->db->beginTransaction();
    }

    /**
     * 
     * If transaction is successful do the commit.
     * 
     * @param Transaction $transaction
     */
    public static function transactionSuccessful($transaction)
    {
        if (!empty($transaction)) {
            $transaction->commit();
        }
    }

    /**
     * 
     * If transaction isn't successful do rollback.
     * 
     * @param Transaction $transaction
     */
    public static function transactionFailure($transaction)
    {
        if (!empty($transaction)) {
            $transaction->rollBack();
        }
    }

}

