<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MDItemMailDateReceived_Ranking extends AbstractTagGroup
{
    protected string $id = 'MacOS:MDItemMailDateReceived_Ranking';

    protected string $name = 'MDItemMailDateReceived_Ranking';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MD Item Mail Date Received Ranking',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::MDItem
             * line : 118963
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MacOS::MDItem.MacOS:MDItemMailDateReceived_Ranking',
            'desc' => [
                'en' => 'MD Item Mail Date Received Ranking',
            ],
        ],
    ];

    protected int $count = 0;
}
