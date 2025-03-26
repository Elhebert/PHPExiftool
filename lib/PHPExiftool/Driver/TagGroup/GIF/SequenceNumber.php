<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SequenceNumber extends AbstractTagGroup
{
    protected string $id = 'GIF:SequenceNumber';

    protected string $name = 'SequenceNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sequence Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GIF::MIDIControl
             * line : 90652
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GIF::MIDIControl.GIF:SequenceNumber',
            'desc' => [
                'en' => 'Sequence Number',
            ],
        ],
    ];

    protected int $count = 0;
}
