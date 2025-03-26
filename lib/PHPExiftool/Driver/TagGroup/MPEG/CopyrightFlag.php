<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightFlag extends AbstractTagGroup
{
    protected string $id = 'MPEG:CopyrightFlag';

    protected string $name = 'CopyrightFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Copyright Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPEG::Audio
             * line : 112784
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:CopyrightFlag',
            'desc' => [
                'en' => 'Copyright Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
