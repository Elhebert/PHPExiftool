<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NativeDigest extends AbstractTagGroup
{
    protected string $id = 'XMP-tiff:NativeDigest';

    protected string $name = 'NativeDigest';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Native Digest',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::tiff
             * line : 290709
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::tiff.XMP-tiff:NativeDigest',
            'desc' => [
                'en' => 'Native Digest',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
