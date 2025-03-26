<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SynchronizedLyricsType extends AbstractTagGroup
{
    protected string $id = 'ID3:SynchronizedLyricsType';

    protected string $name = 'SynchronizedLyricsType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::SynLyrics
             * line : 147169
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::SynLyrics.ID3:SynchronizedLyricsType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
