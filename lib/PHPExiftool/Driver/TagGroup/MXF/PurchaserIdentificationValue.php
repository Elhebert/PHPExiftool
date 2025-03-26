<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PurchaserIdentificationValue extends AbstractTagGroup
{
    protected string $id = 'MXF:PurchaserIdentificationValue';

    protected string $name = 'PurchaserIdentificationValue';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Purchaser Identification Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116871
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:PurchaserIdentificationValue',
            'desc' => [
                'en' => 'Purchaser Identification Value',
            ],
        ],
    ];

    protected int $count = 0;
}
