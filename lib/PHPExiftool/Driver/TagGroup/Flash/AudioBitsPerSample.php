<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioBitsPerSample extends AbstractTagGroup
{
    protected string $id = 'Flash:AudioBitsPerSample';

    protected string $name = 'AudioBitsPerSample';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Flash::Audio
             * line : 123843
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Audio.Flash:AudioBitsPerSample',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
