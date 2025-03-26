<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtendedContentEncryption extends AbstractTagGroup
{
    protected string $id = 'ASF:ExtendedContentEncryption';

    protected string $name = 'ExtendedContentEncryption';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Extended Content Encryption',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::Header
             * line : 906
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::Header.ASF:ExtendedContentEncryption',
            'desc' => [
                'en' => 'Extended Content Encryption',
            ],
        ],
    ];

    protected int $count = 0;
}
