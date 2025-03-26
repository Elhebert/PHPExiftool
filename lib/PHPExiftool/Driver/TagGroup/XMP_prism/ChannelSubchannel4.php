<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChannelSubchannel4 extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:ChannelSubchannel4';

    protected string $name = 'ChannelSubchannel4';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Channel Subchannel 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290062
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::prism.XMP-prism:ChannelSubchannel4',
            'desc' => [
                'en' => 'Channel Subchannel 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
