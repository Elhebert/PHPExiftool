<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage1 extends AbstractTagGroup
{
    protected string $id = 'Nikon:PreviewImage1';

    protected string $name = 'PreviewImage1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview Image 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCDT
             * line : 136889
             * type : undef
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Nikon::NCDT.Nikon:PreviewImage1',
            'desc' => [
                'en' => 'Preview Image 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
