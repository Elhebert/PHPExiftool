<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ConsecutiveBadFaxLines extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ConsecutiveBadFaxLines';

    protected string $name = 'ConsecutiveBadFaxLines';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Consecutive Bad Fax Lines',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81711
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ConsecutiveBadFaxLines',
            'desc' => [
                'en' => 'Consecutive Bad Fax Lines',
            ],
        ],
    ];

    protected int $count = 0;
}
