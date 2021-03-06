<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Sales\Model\Order;

use Magento\Sales\Api\Data\InvoiceCommentBaseInterface;
use Magento\Sales\Api\Data\InvoiceInterface;
use Magento\Sales\Api\Data\OrderInterface;

/**
 * Interface InvoiceNotifierInterface
 *
 * @api
 */
interface InvoiceNotifierInterface
{
    /**
     * @param OrderInterface $order
     * @param InvoiceInterface $invoice
     * @param InvoiceCommentBaseInterface $comment
     * @return void
     */
    public function notify(
        OrderInterface $order,
        InvoiceInterface $invoice,
        InvoiceCommentBaseInterface $comment = null
    );
}
