<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SPIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTagGroup
{
    protected string $id = 'SPIFF:BitsPerSample';

    protected string $name = 'BitsPerSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bits Per Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::SPIFF
             * line : 105346
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SPIFF.SPIFF:BitsPerSample',
            'desc' => [
                'en' => 'Bits Per Sample',
            ],
        ],
    ];

    protected int $count = 0;
}
