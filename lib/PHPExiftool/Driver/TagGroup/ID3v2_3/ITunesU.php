<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ITunesU extends AbstractTagGroup
{
    protected string $id = 'ID3v2_3:iTunesU';

    protected string $name = 'iTunesU';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'iTunes U',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_3
             * line : 103230
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'ID3::v2_3.ID3v2_3:iTunesU',
            'desc' => [
                'en' => 'iTunes U',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
