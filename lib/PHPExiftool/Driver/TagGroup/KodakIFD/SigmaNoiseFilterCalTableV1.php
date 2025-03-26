<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SigmaNoiseFilterCalTableV1 extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:SigmaNoiseFilterCalTableV1';

    protected string $name = 'SigmaNoiseFilterCalTableV1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sigma Noise Filter Cal Table V1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107584
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:SigmaNoiseFilterCalTableV1',
            'desc' => [
                'en' => 'Sigma Noise Filter Cal Table V1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
