<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioDuration extends AbstractTagGroup
{
    protected string $id = 'IPTC:AudioDuration';

    protected string $name = 'AudioDuration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150701
             * type : digits
             * writable : true
             * count : 6
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:AudioDuration',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2048;
}
