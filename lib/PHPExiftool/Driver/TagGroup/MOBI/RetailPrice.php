<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetailPrice extends AbstractTagGroup
{
    protected string $id = 'MOBI:RetailPrice';

    protected string $name = 'RetailPrice';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Retail Price',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::EXTH
             * line : 190757
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::EXTH.MOBI:RetailPrice',
            'desc' => [
                'en' => 'Retail Price',
            ],
        ],
    ];

    protected int $count = 0;
}
