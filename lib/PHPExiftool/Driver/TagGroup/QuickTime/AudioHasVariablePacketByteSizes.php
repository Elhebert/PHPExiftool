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
class AudioHasVariablePacketByteSizes extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioHasVariablePacketByteSizes';

    protected string $name = 'AudioHasVariablePacketByteSizes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Has Variable Packet Byte Sizes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::EncodingParams
             * line : 218578
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::EncodingParams.QuickTime:AudioHasVariablePacketByteSizes',
            'desc' => [
                'en' => 'Audio Has Variable Packet Byte Sizes',
            ],
        ],
    ];

    protected int $count = 0;
}
