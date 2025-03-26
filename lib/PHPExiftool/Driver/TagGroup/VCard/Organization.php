<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCard;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Organization extends AbstractTagGroup
{
    protected string $id = 'VCard:Organization';

    protected string $name = 'Organization';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Organization',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : VCard::Main
             * line : 279896
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'VCard::Main.VCard:Organization',
            'desc' => [
                'en' => 'Organization',
            ],
        ],
    ];

    protected int $count = 0;
}
