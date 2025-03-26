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
class EncryptedBlock extends AbstractTagGroup
{
    protected string $id = 'Matroska:EncryptedBlock';

    protected string $name = 'EncryptedBlock';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Encrypted Block',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119290
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:EncryptedBlock',
            'desc' => [
                'en' => 'Encrypted Block',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
