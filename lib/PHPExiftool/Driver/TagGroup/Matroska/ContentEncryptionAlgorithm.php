<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContentEncryptionAlgorithm extends AbstractTagGroup
{
    protected string $id = 'Matroska:ContentEncryptionAlgorithm';

    protected string $name = 'ContentEncryptionAlgorithm';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Content Encryption Algorithm',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119482
             * type : unsigned
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:ContentEncryptionAlgorithm',
            'desc' => [
                'en' => 'Content Encryption Algorithm',
            ],
        ],
    ];

    protected int $count = 0;
}
