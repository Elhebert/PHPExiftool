<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CMMFlags extends AbstractTagGroup
{
    protected string $id = 'ICC-header:CMMFlags';

    protected string $name = 'CMMFlags';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CMM Flags',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Header
             * line : 99779
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Header.ICC-header:CMMFlags',
            'desc' => [
                'en' => 'CMM Flags',
            ],
        ],
    ];

    protected int $count = 0;
}
