<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Text extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Text';

    protected string $name = 'Text';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Text',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GenMediaHeader
             * line : 218981
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::GenMediaHeader.QuickTime:Text',
            'desc' => [
                'en' => 'Text',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229390
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:Text',
            'desc' => [
                'en' => 'Text',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 230501
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:Text',
            'desc' => [
                'en' => 'Text',
            ],
        ],
    ];

    protected int $count = 0;
}
