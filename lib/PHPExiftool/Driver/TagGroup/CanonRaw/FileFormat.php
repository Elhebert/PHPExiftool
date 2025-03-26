<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileFormat extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:FileFormat';

    protected string $name = 'FileFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::ImageFormat
             * line : 57181
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonRaw::ImageFormat.CanonRaw:FileFormat',
            'desc' => [
                'en' => 'File Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
