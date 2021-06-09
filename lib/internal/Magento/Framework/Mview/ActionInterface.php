<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Mview;

/**
 * Represents an action that should be implement in action controller in MView(Materialized View)
 * @api
 */
interface ActionInterface
{
    /**
     * Execute materialization on ids entities
     *
     * @param int[] $ids
     * @return void
     * @api
     */
    public function execute($ids);
}
