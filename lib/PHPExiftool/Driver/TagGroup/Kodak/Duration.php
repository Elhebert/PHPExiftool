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
class Duration extends AbstractTagGroup
{
    protected string $id = 'Kodak:Duration';

    protected string $name = 'Duration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::frea
             * line : 109794
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::frea.Kodak:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
