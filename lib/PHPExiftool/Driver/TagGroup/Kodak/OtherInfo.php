<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherInfo extends AbstractTagGroup
{
    protected string $id = 'Kodak:OtherInfo';

    protected string $name = 'OtherInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Other Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109512
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:OtherInfo',
            'desc' => [
                'en' => 'Other Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
