<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Video;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTagGroup
{
    protected string $id = 'MIE-Video:Duration';

    protected string $name = 'Duration';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Video
             * line : 111681
             * type : rational64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MIE::Video.MIE-Video:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
