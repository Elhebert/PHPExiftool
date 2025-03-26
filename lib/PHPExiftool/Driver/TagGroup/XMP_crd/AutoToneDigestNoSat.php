<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoToneDigestNoSat extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:AutoToneDigestNoSat';

    protected string $name = 'AutoToneDigestNoSat';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Tone Digest No Sat',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 281837
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:AutoToneDigestNoSat',
            'desc' => [
                'en' => 'Auto Tone Digest No Sat',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
