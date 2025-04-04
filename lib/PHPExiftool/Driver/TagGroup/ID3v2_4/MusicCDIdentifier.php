<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MusicCDIdentifier extends AbstractTagGroup
{
    protected string $id = 'ID3v2_4:MusicCDIdentifier';

    protected string $name = 'MusicCDIdentifier';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Music CD Identifier',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_4
             * line : 103538
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'ID3::v2_4.ID3v2_4:MusicCDIdentifier',
            'desc' => [
                'en' => 'Music CD Identifier',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
